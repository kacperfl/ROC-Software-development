import sys

def encode_message(message):
    encoded_message = ""
    for char in message:
        encoded_char = flip_bits( ord(char) )
        encoded_message += chr(encoded_char)
    return encoded_message

def flip_bits(number):
    # Mask with bits 1 and 3 set to 1 (binary: 0b00000110)
    mask = 0b00000110
    flipped_number = number ^ mask
    return flipped_number


# Check command line arguments
if len(sys.argv) != 2:
    print("Usage: python encoding_example.py <message>")
    sys.exit(1)

# Get message from command line arguments
message = sys.argv[1]

# Encoding the message
encoded = encode_message(message)
print("Encoded message:", encoded)


decoded = encode_message("b`ipnq")
print("Decoded message:", decoded)
