# importing os module 
import os 
  
# Function to rename multiple files
def main():
    def removeYear(): 
        for filename in os.listdir("C:/Users/Tim/Desktop/Workspace/uwcl.preview/education/G370/2019FA/PDF"):
            print(filename)
    def organizeLetters():
        for filename in os.listdir("C:/Users/Tim/Desktop/Workspace/uwcl.preview/education/G370/2019FA/PDF"):
            i=1
            #Can change name to 8: if year is attached like 2010Fall
            name = filename[0:]
            last = name[0]
            #Skip First letter since name will have uppercase
            for letter in name[1:]:
                if letter.isupper() == False:
                    last += letter
                    i += 1   
                    continue
                elif letter.isupper() == True:
                    break
            first = name[i]
            for letter in name[i+1:]:
                if letter != '.':
                    first += letter
                    continue
                elif letter == '.':
                    break
            #print(last + first)
            #os.rename('2019FA/PDF/' + filename, '2019FA/PDF/' + 'Fall2019' + last + first +'.PDF')
            print("<a href='2019FA/PDF/" + filename + "' " + "target='_blank'>")
            print("<div class='col-md-4 col-sm-6'>")
            print("<img src='2019FA/ImgSq/" + filename[:-4] + ".png' " + "alt='...' class='final'>")
            print("<h3 class='finalProject'>        </h3>")
            print("<p><i>" + first + " " + last +"</i></p>")
            print("</div></a>")
            print
    #removeYear()       
    organizeLetters()
            
        
    
  
# Driver Code 
if __name__ == '__main__': 
      
    # Calling main() function 
    main() 
