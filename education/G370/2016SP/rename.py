# importing os module 
import os 
  
# Function to rename multiple files
def main():
    def removeYear(): 
        for filename in os.listdir("imgSq"):
            print(filename[11:])
            os.rename('imgSq/' + filename, 'imgSq/' + filename[11:])
    def organizeLetters():
        for filename in os.listdir("imgSq"):
            i=1
            first = filename[0]
            #Skip First letter
            for letter in filename[1:]:
                if letter.isupper() == False:
                    first += letter
                    i += 1   
                    continue
                elif letter.isupper() == True:
                    break
            last = filename[i]
            for letter in filename[i+1:]:
                if letter != '.':
                    last += letter
                    continue
                elif letter == '.':
                    break
            os.rename('imgSq/' + filename, 'imgSq/' + 'Spring2016' + last + first +'.png')
    #removeYear()       
    organizeLetters()
            
        
    
  
# Driver Code 
if __name__ == '__main__': 
      
    # Calling main() function 
    main() 
