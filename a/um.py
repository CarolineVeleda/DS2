nome=input('nome > ')

vet=nome.split(' ')

tam = len(vet)-1 

i=1

nomef=vet[0] + ' '

while i<tam:
    nomef += vet[i][0] + ' '
    i=i+1 


nomef+= vet[tam]

print (nomef)