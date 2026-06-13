# Laravel Μικρή Υλοποίηση - Εργαστήριο 2

Αυτό το αποθετήριο περιέχει μια μινιμαλιστική εφαρμογή Laravel για τη διαχείριση χρηστών, υλοποιώντας το αρχιτεκτονικό πρότυπο MVC, Routing, Eloquent ORM και μηχανισμούς ασφαλείας (CSRF/XSS).

## Οδηγίες Εγκατάστασης & Εκτέλεσης

1. **Κλωνοποίηση του Repository**:
   ```bash
   git clone <το-link-σας>
   cd laravel-lab-assignment
   ```

2. **Εγκατάσταση Εξαρτήσεων**:
   ```bash
   composer install
   ```

3. **Προετοιμασία Περιβάλλοντος**:
   ```bash
   cp .env.example .env
   touch database/database.sqlite
   ```

4. **Εκτέλεση των Migrations**:
   ```bash
   php artisan migrate
   ```

5. **Εκκίνηση του Server**:
   ```bash
   php artisan server
   ```
   Ανοίξτε τον browser και επισκεφθείτε τη διαδρομή: `http://127.0.0.0`
