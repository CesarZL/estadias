1. [IEEE Access](https://www.overleaf.com/latex/templates/ieee-access-latex-template/cdxrhtbjgszv) *(DESCARGADO)*
2. [PeerJ](https://www.overleaf.com/latex/templates/latex-template-for-peerj-journal-and-pre-print-submissions/ptdwfrqxqzbn) *(DESCARGADO)*
3. [MDPI](https://www.mdpi.com/authors/latex) *(DESCARGADO)*
4. [Scientific Reports](https://www.overleaf.com/latex/templates/template-for-submissions-to-scientific-reports/xyrztqvdccns) *(DESCARGADO)*
5. [Frontiers](https://www.overleaf.com/latex/templates/template-for-frontiers-journal/myxxkvjwqhrv) *(DESCARGADO)*
6. [Wiley](https://authorservices.wiley.com/author-resources/Journal-Authors/Prepare/new-journal-design.html) *(NO EXISTE PLANTILLA FIJA PERO TIENEN OPCIONES Y GUÍAS DE ESTILO QUE SEGUIR)*
7. [Elsevier](https://www.elsevier.com/researcher/author/policies-and-guidelines/latex-instructions) *(NO EXISTE PLANTILLA FIJA PERO TIENEN OPCIONES Y GUÍAS DE ESTILO QUE SEGUIR)*
8. [Springer](https://www.springernature.com/gp/authors/campaigns/latex-author-support/see-where-our-services-will-take-you/18782940) *(DESCARGADO)*
9. [IoP](https://publishingsupport.iopscience.iop.org/questions/latex-template/) *(NO EXISTE PLANTILLA PERO TIENEN GUÍAS DE ESTILOS QUE SEGUIR)*
10. [Taylor and Francis](https://www.overleaf.com/latex/templates/taylor-and-francis-latex-template-for-authors-interact-layout-plus-apa-reference-style/jqhskrsqqzfz) *(DESCARGADO)*
11. [Emerald](https://emeraldpublishinggroup.freshdesk.com/support/solutions/articles/36000215573-can-i-prepare-my-manuscript-in-latex-) *(NO EXISTE PLANTILLA PERO TIENEN GUÍAS DE ESTILOS QUE SEGUIR)*
12. [IEEE Transactions](https://template-selector.ieee.org/secure/templateSelector/downloadTemplate?publicationTypeId=1&titleId=84&articleId=3&fileId=262) *(NO EXISTE PLANTILLA PERO TIENEN GUÍAS DE ESTILOS QUE SEGUIR)*


# Instalar pdflatex y paquetes básicos de LaTeX
sudo apt-get update
sudo apt-get install texlive-latex-base

# Instalar fuentes recomendadas por LaTeX
sudo apt-get install texlive-fonts-recommended

# Instalar fuentes adicionales para LaTeX
sudo apt-get install texlive-fonts-extra

# Instalar paquetes adicionales de LaTeX
sudo apt-get install texlive-latex-extra

# Instalar utilidades de fuentes para LaTeX
sudo apt-get install texlive-font-utils


# Subir carpeta a página web
https://developer.mozilla.org/en-US/docs/Web/API/HTMLInputElement/webkitdirectory

# Tiempo de compilación

| Plantilla            | Computadora Local (s) | Servidor (1GB RAM) (s) | Diferencia (Local - Servidor) (s) |
|----------------------|-----------------------|------------------------|------------------------------------|
| IEEE Access          | 10.403                | 2.022                  | 8.381                              |
| PeerJ                | 5.043                 | 4.140                  | 0.903                              |
| MDPI                 | 11.345                | 4.951                  | 6.394                              |
| Scientific Reports   | 6.374                 | 0.858                  | 5.516                              |
| Frontiers            | 7.137                 | 1.674                  | 5.463                              |
| Wiley                | NA                    | NA                     | NA                                 |
| Springer             | 24.509                | 21.441                 | 3.068                              |
| IoP                  | NA                    | NA                     | NA                                 |
| Taylor and Francis   | 3.988                 | 1.270                  | 2.718                              |
| Emerald              | NA                    | NA                     | NA                                 |
| IEEE Transactions    | NA                    | NA                     | NA                                 |


# Carga de trabajo

| Plantilla            | Computadora Local (CPU %) | Servidor (1GB RAM) (CPU %) | Diferencia (% Local - % Servidor) |
|----------------------|--------------------------|-----------------------------|------------------------------------|
| IEEE Access          | 8.0                      | 6.5                         | 1.5                                |
| PeerJ                | 8.0                      | 6.5                         | 1.5                                |
| MDPI                 | 8.0                      | 6.5                         | 1.5                                |
| Scientific Reports   | 8.0                      | 6.5                         | 1.5                                |
| Frontiers            | 8.0                      | 6.5                         | 1.5                                |
| Wiley                | NA                       | NA                          | NA                                 |
| Springer             | 8.0                      | 6.5                         | 1.5                                |
| IoP                  | NA                       | NA                          | NA                                 |
| Taylor and Francis   | 8.0                      | 6.5                         | 1.5                                |
| Emerald              | NA                       | NA                          | NA                                 |
| IEEE Transactions    | NA                       | NA                          | NA                                 |


### Costos de Compilación en Digital Ocean

**Especificaciones del Servidor:**
- Costo Base: $6/mes
- Costo por Hora: $0.009
- 1 GB / 1 CPU
- 25 GB SSD Disk
- 1000 GB transfer

**Cálculos Estimados:**
1. **Costo por Hora:**
   - Costo por compilación simultánea: 12 veces $0.009 USD

2. **Horas de Compilación al Mes:**
   - Estimación (1 hora al día, 5 días a la semana): 1 hora/día x 5 días/semana x 4.33 semanas/mes

3. **Costo Total por Mes:**
   - Costo por hora * Horas de compilación al mes

4. **Costo Mensual del Servidor:**
   - Costo Base del Servidor + Costo Total por Mes de Compilación

**Resultados Estimados en Pesos Mexicanos (MXN):**
- **Costo Total por Hora:** $1.86 MXN/hora
- **Horas de Compilación al Mes:** ~21.65 horas/mes
- **Costo Total por Mes:** ~$40.39 MXN/mes (Compilación)
- **Costo Mensual del Servidor:** ~$143.96 MXN/mes