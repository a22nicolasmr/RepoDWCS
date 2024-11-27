import json

# Función para buscar un libro por ID
def findValue(dict, bookId):
    try:
        books = dict["book"]  # Asegurarse de que la clave "book" exista
        for book in books:
            if book.get("id") == bookId:  # Usar get para evitar errores si "id" no existe
                return f"The book with id {bookId} is:\n{json.dumps(book, indent=4)}"
        return "There is not any book with this id"
    except KeyError:
        return "The catalog format is incorrect. Missing 'book' key."
    except Exception as e:
        return f"An error occurred while searching for the book: {str(e)}"

# Leer el archivo JSON
try:
    with open("catalog.json", "r") as fileContent:
        data = fileContent.read()
except FileNotFoundError:
    print("Error: The file 'catalog.json' was not found.")
    exit()
except Exception as e:
    print(f"An unexpected error occurred while reading the file: {str(e)}")
    exit()

# Cargar el JSON y manejar errores de formato
try:
    y = json.loads(data)
    catalog = y["catalog"]  # Asegurarse de que la clave "catalog" exista
except json.JSONDecodeError:
    print("Error: The file 'catalog.json' is not a valid JSON file.")
    exit()
except KeyError:
    print("Error: The catalog format is incorrect. Missing 'catalog' key.")
    exit()
except Exception as e:
    print(f"An unexpected error occurred while processing the JSON: {str(e)}")
    exit()

# Mostrar el catálogo formateado
try:
    print(json.dumps(catalog, indent=4))
except Exception as e:
    print(f"An error occurred while printing the catalog: {str(e)}")

# Mostrar una lista de títulos
try:
    books = catalog["book"]
    listaTitulos = [item["title"] for item in books]  # Crear la lista de títulos
    print(json.dumps(listaTitulos, indent=1))
except KeyError:
    print("Error: The catalog format is incorrect. Missing 'book' key.")
except Exception as e:
    print(f"An error occurred while extracting book titles: {str(e)}")

# Buscar un libro por ID
try:
    print(findValue(catalog, 1))  # Cambia el ID para probar diferentes valores
except Exception as e:
    print(f"An error occurred while searching for a book: {str(e)}")
