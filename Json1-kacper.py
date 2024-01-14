import json


with open("data.json") as json_bestand:
    data = json.load(json_bestand)

personen = data["personen"]
for persoon in personen:
    print(f"Naam: {persoon['naam']}, Leeftijd: {persoon['leeftijd']} jaar, Stad: {persoon['stad']}, Telefoon: {persoon['telefoon']}")
