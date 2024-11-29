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
      
class Library:
    def __init__(self, bookList:Book):
      self.bookList=bookList
    
    def borrowBook(title):
     pass

    def returnBook(title):
     pass 