class Person:
    def __init__(self, id:int, name:str, age:int):
        self.id = id
        self.name = name
        self.age = age
    
    def __str__(self):
        return f"Person id: {self.id}, Name: {self.name}, Age: {self.age}"


class Student:
    def __init__(self, idStudent:int, person: Person, degree: str):
        self.idStudent = idStudent
        self.person = person
        self.degree = degree
    
    def __str__(self):
        return f"Student id: {self.idStudent}, {self.person.__str__()}, Degree: {self.degree}"


class StudentGroup:
    def __init__(self, idStudentGroup:int, groupName: str, students:list=None):
        self.idStudentGroup = idStudentGroup
        self.groupName = groupName
        #esta linea de abajo comprueba si existe algun valor para students, si es cierto , el valor sera students y sino le asigna una lista vacia
        self.students = students
        
    
    def showStudents(self):
        for student in self.students:
            print(student.__str__())
    
    def __str__(self):
        return f"StudentGroup id: {self.idStudentGroup}, Group Name: {self.groupName}, Students: {[student.__str__() for student in self.students]}"

    def addStudent(self, student):
        self.students.append(student)
    
    def removeStudent(self, student_id):
        self.students = [student for student in self.students if student.idStudent != student_id]


person1 = Person(1, "Alicia", 21)
person2 = Person(2, "Juanfredo", 22)
person3 = Person(3, "Carlos", 23)

student1 = Student(101, person1, "Computer Science")
student2 = Student(102, person2, "Mathematics")
student3 = Student(103, person3, "Physics")

print("Initial Students:")
print(student1.__str__())
print(student2.__str__())
print(student3.__str__())

studentGroup = StudentGroup(1, "Group A", [student1, student2, student3])
print("\nStudent Group Details:")
studentGroup.showStudents()

studentGroup.removeStudent(102)
print("\nAfter Removing Student with ID 102:")
studentGroup.showStudents()

new_person = Person(4, "Diana", 24)
new_student = Student(104, new_person, "Biology")
studentGroup.addStudent(new_student)

print("\nAfter Adding New Student (Diana):")
studentGroup.showStudents()
