# importing os module 
import os 
  
# Function to rename multiple files
def main():
    def removeYear(): 
        for filename in os.listdir("pdf"):
            #print('Fall2015' + filename[9:])
            os.rename('pdf/' + filename, 'pdf/' + 'Fall2015' + filename[9:])
    def organizeLetters():
        for filename in os.listdir("pdf"):
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
            os.rename('pdf/' + filename, 'pdf/' + 'Fall2015_' + last + first +'.pdf')
    removeYear()       
    #organizeLetters()
            
        
    
  
# Driver Code 
if __name__ == '__main__': 
      
    # Calling main() function 
    main() 
