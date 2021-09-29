def czy_parzysta(liczba):

    if (liczba % 2 == 0):
        return "K";
    else: 
        return "M";

pesel = int(input("Podaj pesel: "));

print(czy_parzysta(pesel//10));

