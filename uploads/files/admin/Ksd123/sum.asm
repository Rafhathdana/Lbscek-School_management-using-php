.model small
.data
    List db 01H,02H,03H,04H,05H,07H,1FH,09H
    total db ?
    totalList=($-List-1)
.code
    MOV AX,@data
    MOV DS,AX
    MOV AL,00H
    MOV CL,totalList
    MOV BL,00H
    MOV SI, offset List
   L6:ADD AL,[SI]
       JC L8
   L7:INC SI
      DEC CL
      CMP CL,00H
      JNZ L6
      MOV total,AL
      MOV total+2,BL
      JMP L5
   L8:INC BL
      JMP L7
    L5:MOV CH,02H
    MOV CL,04H
    MOV BL,AL
    L2:ROL BL,CL
    MOV DL,BL
    AND DL,0FH
    CMP DL,09H
    JBE L4
    ADD DL,07H
    L4:ADD DL,30H
    MOV AH,02H
    INT 21H
    DEC CH
    JNZ L2
    MOV AH,4CH
    INT 21H
END
