import pandas as pd
from datetime import datetime
from datetime import timedelta
import lib_bamboo as bamboo
import os

os.system('cls') #Deze regel nog invullen! Hoe maak je het scherm leeg?
print("Working...")

data = pd.read_excel("Basketbal_Dutch Basketball League_tussenstand.xlsx")
data["datum"] = pd.to_datetime(data["datum"], format="%d/%m/%Y")
data = data.sort_values("datum")

#Informatievraag 1
sumovertreding =str(data['overtredingen'].sum())
file1 = open("files/sumovertreding.txt", "w", encoding="UTF-8")
file1.write(sumovertreding)
file1.close()


#Informatievraag 2
averageOvertreding = str(data["overtredingen"].mean())
file2 = open("files/gemiddeld.txt", "w", encoding="UTF-8")
file2.write(averageOvertreding)
file2.close()

#Informatievraag 3
zwartBoek = data_sorted=data.sort_values("overtredingen",ascending=False)
top5=data_sorted.head(5)
file3 = open("files/zwartboek.txt", "w", encoding="UTF-8")
file3.write(bamboo.prettify(top5, type="zwartboek"))
file3.close()


#Informatievraag 4
eregalerijFile = open("files/eregalerij.txt", "w", encoding="UTF-8")
data["datum"] = pd.to_datetime(data["datum"], format="%d%m%Y")
checkdays = 14
date_check = datetime.now() - timedelta(days=14)
eregalerijSorted = data.sort_values("datum", ascending=True)
filter = ((data["overtredingen"] < 2) & (data["datum"] > date_check))
eregalerij = eregalerijSorted[filter]

file4 = open("files/eregalerij.txt", "w", encoding="UTF-8")
file4.write(bamboo.prettify(eregalerij, type="eregalerij"))
file4.close()








print("Done!")
