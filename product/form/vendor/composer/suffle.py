
#definition of the function
def suffle(l1, l2):

    #creating an empty list
    l3=[]
    #if both the lists exists
    if len(l1) != 0 and len(l2) != 0:
        #first adding the shorter list elements by same index alternatively
        for i in range(min(len(l1), len(l2))):
            l3.extend([l1[i], l2[i]])

        #adding the rest of the elements
        l3.extend((l1[i+1:]) or l2[i+1:])

    #adding the list which exists
    else:
        l3.extend(l1 or l2)

    #returning the resultant list
    return l3

#----------------------------------------------------------------------------------

#inutting the number of elements in the first list
n1 = int(input("Enter number of elements in l1 : "))

#declaring the first list
list_1 = []
#inputting the elements in the first list
print("Enter elements : ")
for i in range(0, n1):
    element=int(input())
    list_1.append(element)

#inutting the number of elements in the second list
n2 = int(input("Enter number of elements in l2 : "))
#declaring the second list
list_2 = []
#inputting the elements in the second list
print("Enter elements : ")
for i in range(0, n2):
    element=int(input())
    list_2.append(element)

#calling the function suffle()
final_list=suffle(list_1, list_2)

#displaying the output
print("After the suffling the elements of first and second lists :")
print(final_list)