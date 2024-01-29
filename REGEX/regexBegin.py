import re
# KACPER FLAKKK
def validate_phone_number(phone_number):
    pattern = r"^06\d{7}$"
    if re.match(pattern, phone_number):
        return True
    return False

# Voorbeeldgebruik:
phone_number = input("0687634533 ")
if validate_phone_number(phone_number):
    print("Het ingevoerde nummer is geldig.")
else:
    print("Het ingevoerde nummer is ongeldig.")