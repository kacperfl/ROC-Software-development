import time

def is_power_of_two_decimal(num):
    if num <= 0:
        return False

    while num > 1:
        if num % 2 != 0:
            return False
        num //= 2

    return True


def is_power_of_two_bitwise(num):
    if num <= 0:
        return False

    return num & (num - 1) == 0


# Decimale berekening
start_time = time.time()
result_decimal = is_power_of_two_decimal(2**1000000)
end_time = time.time()
execution_time_decimal = end_time - start_time

# Binaire berekening
start_time = time.time()
result_bitwise = is_power_of_two_bitwise(2**1000000)
end_time = time.time()
execution_time_bitwise = end_time - start_time

print("Decimal Approach Result:", result_decimal)
print("Decimal Approach Execution Time:", execution_time_decimal)
print()
print("Bitwise Approach Result:", result_bitwise)
print("Bitwise Approach Execution Time:", execution_time_bitwise)