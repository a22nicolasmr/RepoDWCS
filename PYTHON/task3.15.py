import json

# Write a function called findValue that receives as parameters the dictionary and a book id and shows the properties of the book on the screen
def findValue(dict,bookId):
 books=dict["book"]
 for book in books:
  if book["id"]==bookId:
    return (f"The book whith id {bookId} is {json.dumps(book,indent=4)}")
 return"There is not any book with this id"   


# read the dictionary and show it on the screen with a nice format
with open ("catalog.json","r") as fileContent:
    data=fileContent.read()

y=json.loads(data)
catalog=y["catalog"]
print(json.dumps(catalog,indent=4))

# Show a list of the titles of the books.
books=catalog["book"]

listaTitulos=[]
for item in books:
 listaTitulos.append(item["title"])

print(json.dumps(listaTitulos,indent=1))

print(findValue(catalog,1))


