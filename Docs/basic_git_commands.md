# Instalación

* [Descarga git para Windows](https://git-scm.com/downloads/win)
* [Descarga git para OSX](https://git-scm.com/downloads/mac)
* [Descarga git para Linux](https://git-scm.com/downloads/linux)



# Comandos basicos GIT

### Inicializar un repositorio 
Git Inicia un nuevo repositorio de Git en el directorio actual.

```bash
git init
```
### Clonar un repositorio existente. 
Descarga un repositorio remoto (por ejemplo, desde GitHub) a tu máquina local.

```bash
git clone <url_del_repositorio>
```
### Ver el estado del repositorio.
Muestra el estado de los archivos en el repositorio, indicando si están modificados, no rastreados o listos para ser "commiteados".

```bash
git status
```
### Agregar archivos al área de preparación (stage)
Añade archivos o cambios específicos al área de preparación (staging) para incluirlos en el próximo commit.

```bash
git add <archivo>
```
  Para agregar todos los archivos modificados:

```bash
git add .
```
 
## Hacer un commit
Crea un nuevo commit con los cambios que están en el área de preparación. Debes agregar un mensaje descriptivo.
```bash
git commit -m "Mensaje del commit"
```


### Ver el historial de commits
Muestra el historial de commits del repositorio.

```bash
git log
```

### Subir cambios al repositorio remoto
Envía los commits locales al repositorio remoto (por ejemplo, GitHub).

```bash
git push origin <rama>
```

### Traer cambios desde el repositorio remoto
Descarga los últimos cambios desde el repositorio remoto a tu máquina local (sin combinar los cambios).


```bash
git fetch
```

### Fusionar cambios del repositorio remoto con la rama actual
Combina los cambios descargados desde el repositorio remoto en la rama en la que estás trabajando.

```bash
git merge <rama>
```

###  Obtener y fusionar cambios en un solo paso
Descarga los cambios del repositorio remoto y los fusiona directamente con tu rama actual.

```bash
git pull
```

###  Crear una nueva rama
Crea una nueva rama basada en la rama actual.

```bash
git branch <nombre_de_la_rama>
```

###  Cambiar a otra rama
Cambia a una rama existente.

```bash
git checkout <nombre_de_la_rama>
```

###  Crear y cambiar a una nueva rama al mismo tiempo
Crea una nueva rama y cambia a ella inmediatamente.

```bash
git checkout -b <nombre_de_la_rama>
```

###  Eliminar una rama
Elimina una rama local que ya no necesites.

```bash
git branch -d <nombre_de_la_rama>
```


###  Ver las ramas existentes
Muestra una lista de todas las ramas en el repositorio.

```bash
git branch
```

###  Deshacer cambios locales no confirmados
Revierte los cambios de un archivo al último commit.

```bash
git checkout -- <archivo>
```



###  Ver las diferencias entre archivos o commits
Muestra las diferencias entre el estado actual de los archivos y el último commit.

```bash
git diff
```

###  Añadir un repositorio remoto
Asocia tu repositorio local con uno remoto (como GitHub).

```bash
git remote add origin <url_del_repositorio>
```

Estos comandos son esenciales para empezar a usar Git y manejar el control de versiones de tu código.


* [Guia Basica de Git- Material de apoyo](https://rogerdudler.github.io/git-guide/index.es.html)