class DivisionByZeroError(Exception):
    """Custom exception for division by zero."""
    def __init__(self, message="Cannot divide by zero"):
      super().__init__(message)

def divide_numbers(numerator,denominator):
    try:
        if denominator==0:
            raise DivisionByZeroError()
        return numerator/denominator
    except DivisionByZeroError as e:
        return e
        
print(divide_numbers(12,0))