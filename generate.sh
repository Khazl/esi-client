#!/bin/bash

echo "Generating EVE ESI PHP client using Docker..."

OUTPUT_DIR="$(pwd)"
SWAGGER_URL="https://esi.evetech.net/latest/swagger.json"
USER_ID=$(id -u)
GROUP_ID=$(id -g)

# Ensure output directory exists
if [ ! -d "$OUTPUT_DIR" ]; then
    echo "Creating output directory: $OUTPUT_DIR"
    mkdir -p "$OUTPUT_DIR"
fi

# Docker command
CMD="docker run --rm \
-u ${USER_ID}:${GROUP_ID} \
-v ${OUTPUT_DIR}:/local \
openapitools/openapi-generator-cli generate \
-i ${SWAGGER_URL} -g php -o /local \
--additional-properties=invokerPackage=EsiClient,packageName=EsiClient,composerVendorName=khazl,composerProjectName=esi-client"

echo "Running Docker command:"
echo "$CMD"
eval "$CMD"

COMPOSER_FILE="${OUTPUT_DIR}/composer.json"
if [ -f "$COMPOSER_FILE" ]; then
    echo "Patching composer.json with correct package name..."
    jq '.name = "khazl/esi-client"' "$COMPOSER_FILE" > "${COMPOSER_FILE}.tmp" && mv "${COMPOSER_FILE}.tmp" "$COMPOSER_FILE"

    echo "Bumping version in composer.json..."
    CURRENT_VERSION=$(jq -r '.version // "0.1.0"' "$COMPOSER_FILE")
    IFS='.' read -r major minor patch <<< "$CURRENT_VERSION"
    patch=$((patch + 1))
    NEW_VERSION="${major}.${minor}.${patch}"
    jq --arg name "khazl/esi-client" --arg version "$NEW_VERSION" \
        '.name = $name | .version = $version' \
        "$COMPOSER_FILE" > "${COMPOSER_FILE}.tmp" && mv "${COMPOSER_FILE}.tmp" "$COMPOSER_FILE"
    echo "Updated version to $NEW_VERSION"
fi

echo "EVE ESI client generation completed."
