import random
import time

def generate_binary_number():
    # Generate a random one-byte binary number
    binary = ''.join(random.choices('01', k=8))
    return binary

def convert_to_hex(binary):
    # Convert the binary number to hexadecimal
    decimal = int(binary, 2)
    hex_number = hex(decimal)[2:].upper()
    return hex_number

def print_byte_groups(binary):
    # Print the binary number in groups of 4 bits
    groups = [binary[i:i+4] for i in range(0, len(binary), 4)]
    byte = ' '.join(groups)
    print("Byte:", byte)

def play_game():
    print("Welcome to the Binary to Hex Conversion Game!")
    name = input("Enter your name: ")
    print("Hello,", name + "!")
    print("You have 60 seconds to convert as many one-byte binary numbers to hexadecimal as possible.")
    print("Each byte will be printed in groups of 4 bits.")
    print("Let's begin!\n")

    score = 0
    start_time = time.time()

    while time.time() - start_time < 60:
        binary_number = generate_binary_number()
        print_byte_groups(binary_number)

        user_input = input("Enter the hexadecimal equivalent: ").strip().upper()

        if user_input == convert_to_hex(binary_number):
            print("Correct!\n")
            score += 1
        else:
            print("Incorrect!\n")

    end_time = time.time()
    elapsed_time = end_time - start_time

    print("Time's up!")
    print("Your score:", score)
    print("Elapsed time:", round(elapsed_time, 2), "seconds")
    print("Thank you for playing, " + name + "!")

play_game()