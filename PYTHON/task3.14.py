def showDictionary(dict):
 for item in dict:
  print(f"Item number {item} is {dict[item]}")
  
def findValue(dict,key):
 for item in dict:
  if item==key:
    return f"Se encontro la llave {key} que es {dict[key]}"
 return("No se encontro ningun valor con la llave especificada.")     
    
def mergeDictionaries(dict1,dict2):
 cont=len(dict1)
 dict3={} 
 for item in dict1:
  dict3.update({item:dict1[item]})
  
  
 for item in dict2:
  
  dict3.update({cont:dict2[item]})
  cont=cont+1
  
    
 return dict3

products={
    0:'potatoes',
    1:'tomatoes',
    3:'onions',
    4:'garlic'
}
 
showDictionary(products)
products.update({5:'cheese'})
products.update({6:'bread'})

print(findValue(products,5))

products2={
    0:'milk',
    1:'chocolate',
    2:'colacao',
    3:'letuicce'
}
   
print(mergeDictionaries(products,products2))
