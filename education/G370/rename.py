# importing os module 
import os 
  
# Function to rename multiple files
def main():
    def organizeLetters():
        ##Change path to the folder containing the final projects
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
            ##Use the os.rename if you still need to add the year/semester to the project names
            #os.rename('2019FA/PDF/' + filename, '2019FA/PDF/' + 'Fall2019' + last + first +'.PDF')
            
            #Change the relative path to the respective course time (If spring 2020: e.g. 2020SP)
            print("<a href='2019FA/PDF/" + filename + "' " + "target='_blank'>")
            print("<div class='col-md-4 col-sm-6'>")
            #Change path to be the same as two lines above
            print("<img src='2019FA/ImgSq/" + filename[:-4] + ".png' " + "alt='...' class='final'>")
            print("<h3 class='finalProject'>        </h3>")
            print("<p><i>" + first + " " + last +"</i></p>")
            print("</div></a>")
            print
    
    organizeLetters()
            
        
    
  
# Driver Code 
if __name__ == '__main__': 
      
    # Calling main() function 
    main() 
