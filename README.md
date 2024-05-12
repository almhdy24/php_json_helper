# SimpleJson Class

The `SimpleJson` class is a powerful tool that allows you to work with JSON data as if it were a database. With features to read, search, update, and delete data within a JSON file, this class provides a flexible and efficient way to query and manage your JSON data.

## Features
- **Read Data**: Retrieve all data stored in the JSON file.
- **Search Data**: Filter data based on specified conditions and fetch matching results.
- **Update Data**: Update existing data that meets certain conditions with new information.
- **Delete Data**: Remove data entries that match specific conditions from the JSON file.

## Getting Started
1. **Installation**: Include the `SimpleJson` class in your PHP project.
2. **Initialization**: Create an instance of the `SimpleJson` class by providing the path to your JSON file.
3. **Usage**: Use the provided methods to interact with and manipulate your JSON data.

## Methods

### `read(): array`
- **Description**: Retrieves all data stored in the JSON file.
- **Return Value**: An array representing the JSON data.

### `search(array $conditions): array`
- **Description**: Filters data based on specified conditions and returns matching results.
- **Parameters**:
  - `$conditions` (array): Associative array of key-value pairs representing the conditions to match.
- **Return Value**: An array containing the matched data entries.

### `update(array $conditions, array $updatedData): bool`
- **Description**: Updates data that meets certain conditions with new information.
- **Parameters**:
  - `$conditions` (array): Associative array of key-value pairs representing the conditions to match.
  - `$updatedData` (array): Associative array of key-value pairs containing the updated data.
- **Return Value**: A boolean indicating if the data was successfully updated.

### `delete(array $conditions): bool`
- **Description**: Deletes data entries that match specific conditions from the JSON file.
- **Parameters**:
  - `$conditions` (array): Associative array of key-value pairs representing the conditions to match.
- **Return Value**: A boolean indicating if any data entries were deleted.

## Example Usage
```php
// Initialize SimpleJson with a JSON file path
$json = new SimpleJson('data.json');

// Search for data based on conditions
$searchResults = $json->search(['category' => 'books']);

// Update data entries based on conditions
$updated = $json->update(['id' => 1], ['price' => 25.99]);

// Delete data entries based on conditions
$deleted = $json->delete(['category' => 'electronics']);
```

## Important Notes
- Ensure that the JSON file path provided during initialization exists and is accessible.
- Handle errors and edge cases appropriately to maintain data integrity.

The `SimpleJson` class simplifies the process of querying JSON data, providing a convenient solution for managing structured information. Explore the methods and unleash the power of JSON manipulation in your PHP projects.