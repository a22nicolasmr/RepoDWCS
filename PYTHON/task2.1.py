words = ["List", "Dictionary", "Array"]
definitions = ["Ordered array of objects", "Unordered array of key-value pairs", "Mathematic definition"]

# Creamos el diccionario vacío
coolDictionary = {}

# Rellenamos el diccionario con pares palabra-definición
for num in range(len(words)):
    coolDictionary[words[num]] = definitions[num]

# Imprimimos las palabras y sus definiciones
for word, definition in coolDictionary.items():
    print(f"{word} : {definition}")
