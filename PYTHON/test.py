import re

def extract_authors_sections(filename):
    with open(filename, 'r') as file:
        content = file.read()

    # Extracción de autores
    authors = re.findall(r'\\author\{(.*?)\}', content, re.DOTALL)
    
    # Extracción de secciones
    sections = re.findall(r'\\(section|subsection)\{(.*?)\}', content)

    return authors, sections

if __name__ == "__main__":
    filename = "access.tex"  # Reemplaza con la ruta de tu archivo .tex
    authors, sections = extract_authors_sections(filename)

    print("Autores:")
    for author in authors:
        print(author)

    print("\nSecciones:")
    for section in sections:
        print(section)
