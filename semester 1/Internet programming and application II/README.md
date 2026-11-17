# CP 311 – Internet Programming and Applications II

## Group Assignment: XML-Based Student Information System

### 1. Overview

This assignment explores the use of XML (Extensible Markup Language) to store, structure, and exchange student information between different computer systems.

A college intends to use XML to facilitate data exchange between its Student Registration System and Examination Management System. The assignment demonstrates how XML and PHP can support this process.

### 2. Objectives

- Design a well-formed XML document containing student information.
- Define the XML structure using an internal DTD.
- Process and display XML data using PHP SimpleXML.
- Explain how XML facilitates data exchange between different systems.

### 3. Tasks and Implementation

| Task | Description | File |
|---|---|---|
| 1. XML Document Design | Create an XML document containing at least 10 students, their personal details and registered courses. | `students.xml` |
| 2. Internal DTD | Define the required elements, element order, student and course structures, and attributes. | `students.xml` |
| 3. PHP SimpleXML | Load and traverse the XML document to display student names, programmes and registered courses. | `students.php` |
| 4. XML Data Exchange | Explain how XML facilitates information exchange between the college's two systems. | `documentation/` |

### 4. Technologies Used

- XML
- DTD (Document Type Definition)
- PHP
- PHP SimpleXML

### 5. Project Structure

```text
CP311-XML-Assignment/
│
├── README.md
├── students.xml
├── students.php
│
└── documentation/
    └── XML-Data-Exchange.md
```

### 6. Running the Project

**Requirements:** PHP with the SimpleXML extension enabled.

Run the PHP program from the project directory:

```bash
php students.php
```

Alternatively, start the PHP development server:

```bash
php -S localhost:8000
```

Open `http://localhost:8000/students.php` in your browser.

### 7. XML Validation

Check whether the XML document is well-formed:

```bash
xmllint --noout students.xml
```

Validate the document against its internal DTD:

```bash
xmllint --noout --valid students.xml
```

### 8. Additional Documentation

See the `documentation/` directory for the detailed explanation of XML data exchange required in Task 4.

---

**Course:** CP 311 – Internet Programming and Applications II  
**Topic:** XML  
**Assignment Type:** Group Assignment