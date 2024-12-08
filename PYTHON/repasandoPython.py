class PersonNotFound(Exception):
  def __init__(self, message="This person doesnt exist yet"):
    super().__init__(message)

class DuplicatePerson(Exception):
  def __init__(self, message="This person is already added"):
    super().__init__(message)

class Person:
    def __init__(self,id: int, name:str, age:int):
      self.id = id
      self.name = name
      self.age = age
      
    def __str__(self):
       return f"Person->Id= {self.id}, Name= {self.name}, Age= {self.age}"
    
class Student:
  def __init__(self,id: int, person: Person, degree: str):
    self.id = id
    self.person = person
    self.degree = degree
    
  def __str__(self):
   return f"Student->Id= {self.id}, Person= {str(self.person)}, Degree= {self.degree}"
 
class StudentGroup:
  def __init__(self, id,groupName, students:Student):
    self.id = id
    self.groupName = groupName
    self.students=students
    
  def __str__(self):
    studentListString=""
    for student in self.students:
     studentListString+=str(student)+"\n"    
    return f"StudentGroup-> Id= {self.id}, GroupName={self.groupName}, Students: \n{studentListString}"
  
  
  def removeStudent(self,id):
   for student in self.students:
    if student.id==id:
      self.students.remove(student)
      return "Student succesfully removed"
   raise PersonNotFound() 
 
  def addStudent(self,student):
   for studento in self.students:
    if student.id==studento.id:
      raise DuplicatePerson()

   self.students.append(student)
   return "Student succesfully added"

  
person1=Person(1,"person1",11)
person2=Person(2,"person2",12)
person3=Person(3,"person3",13)


student1=Student(1,person1,"degree1")
student2=Student(2,person2,"degree2")
student3=Student(3,person3,"degree3")

# print(student1)

studentGroup=StudentGroup(1,"group1",[student1,student2,student3])
# print(studentGroup)

# print(studentGroup.removeStudent(9))

# print(studentGroup)

person4=Person(4,"person4",14)
student4=Student(4,person4,"degree4")

print(studentGroup.addStudent(student3))
print(studentGroup)