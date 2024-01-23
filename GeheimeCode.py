import sys

def encode_message(message):
    encoded_message = ""
    for char in message:
        encoded_char = flip_bits(ord(char))
        encoded_message += chr(encoded_char)
    return encoded_message

def flip_bits(number):
    # Mask with both the second (bit 1) and fourth (bit 3) bits set to 1
    mask = 0b00001010  
    flipped_number = number ^ mask
    return flipped_number

# Controleer commandoregelargumenten
if len(sys.argv) != 2:
    print("Gebruik: python encoding_example.py <bericht>")
    sys.exit(1)

# Haal bericht en sleutel op uit de commandoregelargumenten
message = sys.argv[1]

# Codeer het bericht
encoded = encode_message(message)
print("Gecodeerd bericht:", encoded)
