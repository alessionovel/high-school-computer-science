# High School Computer Science

Coursework from my years at an Italian technical high school (ITIS, computer science track): exercises, assignments, tests and group projects across the four technical subjects of the curriculum.

The code, comments and UI text are in **Italian**, as they were written at the time. Folder and file names have been translated to English and reorganised so the repository is easy to browse.

## Contents

| Folder | Subject (Italian name) | What's inside |
| --- | --- | --- |
| [`computer-science/`](computer-science) | Informatica | C++ exercises and games, object-oriented Java, Android apps, PHP/MySQL web apps, database design |
| [`networking-and-security/`](networking-and-security) | Sistemi e Reti | Classical and modern cryptography in Java, OpenSSL labs, Cisco Packet Tracer networks |
| [`systems-design/`](systems-design) | TPSIT | Java multithreading and concurrency, sockets, UML models |
| [`project-management/`](project-management) | Gestione Progetto e Organizzazione d'Impresa | WBS, Gantt plans, diagrams and spreadsheets |
| [`internship/`](internship) | Alternanza Scuola-Lavoro (PCTO) | Internship report |

## Highlights

- **[Bike sharing](computer-science/projects/bike-sharing)**: final-year group project, a PHP/MySQL bike-sharing platform with user area, smart card top-ups, rental history and an admin back office.
- **[Dairy farm management](computer-science/web/16-dairy-farm)**: PHP web app with a JSON API consumed by an [Android client](computer-science/android/07-dairy-farm).
- **[Java concurrency](systems-design/java-concurrency)**: producer/consumer, shared resources and client/server sockets.
- **[C++ games](computer-science/cpp/projects)**: Pac-Man, Snake and Battleship in the console.

## Tech

C++ · Java · Android · PHP · MySQL · HTML/CSS/JavaScript · Vue.js · OpenSSL · Cisco Packet Tracer · UML (Astah) · draw.io

## Related repositories

- [smartMarkets](https://github.com/alessionovel/smartMarkets): final exam project (it used to live here as well).

## Notes

- Credentials that had been committed in the original upload have been replaced with placeholders (`DB_HOST`, `DB_USER`, `DB_PASSWORD`, `YOUR_APP_PASSWORD`). To run the PHP projects, set your own values in the `db_connection.php` / `connectDb.php` files.
- Java projects come from Eclipse: import the folder as a Java project and use `src/` as the source folder. Projects that use a database need the MySQL JDBC driver and the `.sql` dump in the project folder.
- Android projects can be opened in Android Studio.
