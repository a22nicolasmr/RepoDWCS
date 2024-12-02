class BookNotAvailableException(Exception):
    def __init__(self,message="Book already borrowed"):
        super().__init__(message)

class BookNotFoundException(Exception):
    def __init__(self,message="Book not found"):
      super().__init__(message)
      
class Book:
    def __init__(self, title: str, author: str,status: bool):
      self.title = title
      self.author = author
      self.status=status
    
    def __str__(self):
       return f"Book {self.title} has been written by {self.author} and available is= {self.status}"
      
class Library:
    def __init__(self, bookList:Book):
      self.bookList=bookList
    
    def listBooks(self):
      return "\n".join([book.__str__() for book in self.bookList])
   
   
    def borrowBook(self,title):
     for book in self.bookList:
       if book.title == title :
         if book.status ==False:
           raise BookNotAvailableException
         else:
           book.status=False
           return f"The book with title= {title} has been borrowed"
       else:
         raise BookNotFoundException
      

    def returnBook(self,title):
     for book in self.bookList:
       if book.title == title :
         if book.status ==False:
           book.status=True
           return f"Book with title= {title} succesfully returned"
         else:
           book.status=True
           return "The book is already available"
       else:
         raise BookNotFoundException
   
book1=Book("title1","Author book 1",True)

book2=Book("title2","Author book 2",True)

book3=Book("title3","Author book 3",True)

books=[book1,book2,book3]

library1=Library(books)

print(library1.listBooks())

print(library1.borrowBook("title1"))
print(library1.returnBook("title1"))
# print(library1.borrowBook("title1"))
# print(library1.borrowBook("title12"))
