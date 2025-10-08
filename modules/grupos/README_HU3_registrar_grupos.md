\# HU3 — Registrar nuevos grupos de estudiantes



\## Objetivo

Permitir al coordinador registrar un nuevo grupo con nombre, nivel, número de estudiantes y características.



\## Criterios de aceptación

\- Se puede crear un grupo con campos requeridos: nombre, nivel, num\_estudiantes (>0).

\- Validar duplicados por (nombre + nivel).

\- Persistencia en BD (tabla `grupo`).

\- Mensajes claros de éxito/error.



\## Endpoints (propuestos)

\- POST /api/grupos

&nbsp; - body: { nombre, nivel, num\_estudiantes, caracteristicas? }



\## Modelo (propuesto)

\- grupo(id, nombre, nivel, num\_estudiantes, caracteristicas, activo)



\## Tareas técnicas

\- \[ ] DTO + validaciones

\- \[ ] Servicio de creación

\- \[ ] Repositorio (INSERT)

\- \[ ] Handler/Controller

\- \[ ] Pruebas (mínimo 3)



