import mysql.connector

conn = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",  
    database="ajax_books"
)

cursor = conn.cursor()
if conn.is_connected():
    print("Connection successful!")
else:
    print("Connection failed.")

def add_book(tiltle,author,year):
    cursor.execute("INSERT INTO books (title, author, year) VALUES (%s, %s, %s)", (tiltle, author, year))
    conn.commit()
    print(f'Book {tiltle} by {author} has been added to the database')

def show_book():
    cursor.execute("SELECT * FROM books")
    books=cursor.fetchall()
    if books:
        print("\n All Books in Database:")
        print("------------------------" )
        for row in books:
            print(f"""
                  ID:    {row[0]} 
                  Title: {row[1]} 
                  Author:{row[2]} 
                  Year:  {row[3]}""")
        print("------------------------" )
    else:
        print("No books found in the database.")

def edit_book(new_title, new_author, new_year,book_id):
    cursor.execute("UPDATE books SET title=%s, author=%s, year=%s WHERE id=%s", (new_title, new_author, new_year,book_id))
    conn.commit()
    print(f"Book with ID {book_id} has been updated.")

def delete(book_id):
    cursor.execute("DELETE FROM books WHERE id=%s", (book_id,))
    conn.commit()
    print(f"Book with ID {book_id} has been deleted.")

def search_book(book_name):
    cursor.execute("SELECT * FROM books WHERE title LIKE %s ", (book_name,))
    book_sarch=cursor.fetchall()
    if book_sarch:
        print("\n Search Results:")
        for book in book_sarch:
            print(f"ID: {book[0]}, Title: {book[1]}, Author: {book[2]}, Status: {book[3]}")
    else:
        print(f"No books found for keyword '{book_name}'.")


while True:
    print("""
          
          =========Book Management System========
          1. Add Book
          2. View Book
          3. Search Book
          4. Delete Book
          5. Update Book
          6. Exit
          
        """)
    userchoice=int(input("Enter your choice:"))
    if userchoice==1:
        tiltle=input("Enter book title:")
        author=input("Enter book author:")
        year=input("Enter book year:")
        #function to add book
        add_book(tiltle,author,year)
    elif userchoice==2:
        show_book()
    elif userchoice==3:
        book_name=input("Enter book name:")
        search_book(book_name)
    elif userchoice==4:
        book_id=input("Enter book id You want to delete:")
        delete(book_id)
    elif userchoice==5:
        new_title=input("Enter new title:")
        new_author=input("Enter new author:")
        new_year=input("Enter new year:")
        book_id=input("Enter book id You want to update:")
        edit_book(new_title,new_author,new_year,book_id)
    elif userchoice==6:
        print("Exit")
        break
    else:
        print("Invalid Choice")

    

