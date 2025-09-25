# Variables
CC = gcc
CFLAGS = -Wall -g
OBJ = main.o isEven.o isOdd.o
TARGET = checkNum

# Build target
$(TARGET): $(OBJ)
	$(CC) $(CFLAGS) -o $(TARGET) $(OBJ)

# Compile main.o
main.o: main.c isEven.h isOdd.h
	$(CC) $(CFLAGS) -c main.c

# Compile isEven.o
isEven.o: isEven.c isEven.h
	$(CC) $(CFLAGS) -c isEven.c

# Compile isOdd.o
isOdd.o: isOdd.c isOdd.h
	$(CC) $(CFLAGS) -c isOdd.c

# Clean rule
clean:
	rm -f $(OBJ) $(TARGET)
