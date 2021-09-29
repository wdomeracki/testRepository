pkt = float(input('Podaj liczbe zdobytych punktow: '))
f = float(input('Podaj frekwencje klasy: '))
so = float(input('Podaj srednia ocen: '))
x=0
if (f>94 and so>=4):
    x=pkt+20
    print("aktualna liczba punktow wynosi ",x)
else:
    print("aktualna liczba punktow ",pkt)