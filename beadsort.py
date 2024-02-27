
num_list = [5,6,8,2]
def bead_sort(input_list):
    transposed_list = [0] * max(input_list)
    print(transposed_list)
    beads = ''
    for number in input_list:
        counter = 0
        for column, value in enumerate(transposed_list[:number]):
            counter += 1
            transposed_list[column] = value + 1
        for x in range(counter): # print circles
            beads += "⦶ "
        beads += "\n"
   
    
    print(beads)
    print(transposed_list, "\n")
    beads = ''       
    for row in range(max(input_list), 0, -1):
        for column, value in enumerate(transposed_list):
            
            if value >= row:
                beads += "⦶ "
                transposed_list[column] -= 1
                print(transposed_list)
                print(beads)
            else:
                beads += "  " # double space since we are using 2 character spaces when adding our beads.
        beads += f"{row} Row \n" 
    
    print(beads)  
    ## the final sort
    bead_rows = beads.split("\n")
    answer = []
    for row in bead_rows:
        bead_count = row.count("⦶")
        if bead_count > 0:
            answer.append(bead_count)

    print(answer)
            
    
        
    
    

    
    
    
bead_sort(num_list)