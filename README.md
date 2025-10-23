# API Documentation

This document provides documentation for the available API endpoints.

## Authentication

### Register

- **Endpoint:** `/api/auth/register`
- **Method:** `POST`
- **Description:** Registers a new user.
- **Request Body:**
  ```json
  {
    "name": "John Doe",
    "email": "john.doe@example.com",
    "password": "password123"
  }
  ```
- **Response:**
  ```json
  {
    "message": "Registered successfully",
    "user": {
      "name": "John Doe",
      "email": "john.doe@example.com",
      "updated_at": "2025-10-23T10:00:00.000000Z",
      "created_at": "2025-10-23T10:00:00.000000Z",
      "id": 1
    },
    "token": "your-jwt-token",
    "token_type": "bearer",
    "expires_in": 3600
  }
  ```

### Login

- **Endpoint:** `/api/auth/login`
- **Method:** `POST`
- **Description:** Logs in a user.
- **Request Body:**
  ```json
  {
    "email": "john.doe@example.com",
    "password": "password123"
  }
  ```
- **Response:**
  ```json
  {
    "message": "Logged in successfully",
    "token": "your-jwt-token",
    "token_type": "bearer",
    "expires_in": 3600,
    "user": {
      "id": 1,
      "name": "John Doe",
      "email": "john.doe@example.com",
      "email_verified_at": null,
      "created_at": "2025-10-23T10:00:00.000000Z",
      "updated_at": "2025-10-23T10:00:00.000000Z"
    }
  }
  ```

### Refresh Token

- **Endpoint:** `/api/auth/refresh`
- **Method:** `POST`
- **Description:** Refreshes an expired JWT token. Requires a valid, but expired, token in the `Authorization` header.
- **Response:**
  ```json
  {
    "token": "your-new-jwt-token",
    "token_type": "bearer",
    "expires_in": 3600
  }
  ```

### Logout

- **Endpoint:** `/api/auth/logout`
- **Method:** `POST`
- **Description:** Logs out the authenticated user. Requires a valid token in the `Authorization` header.
- **Response:**
  ```json
  {
    "message": "Logged out successfully"
  }
  ```

### Get Authenticated User

- **Endpoint:** `/api/auth/me`
- **Method:** `GET`
- **Description:** Retrieves the authenticated user's information. Requires a valid token in the `Authorization` header.
- **Response:**
  ```json
  {
    "id": 1,
    "name": "John Doe",
    "email": "john.doe@example.com",
    "email_verified_at": null,
    "created_at": "2025-10-23T10:00:00.000000Z",
    "updated_at": "2025-10-23T10:00:00.000000Z"
  }
  ```

## Profile

### Get Profile

- **Endpoint:** `/api/profile`
- **Method:** `GET`
- **Description:** Retrieves the authenticated user's profile information. Requires a valid token in the `Authorization` header.
- **Response:**
  ```json
  {
    "id": 1,
    "name": "John Doe",
    "email": "john.doe@example.com",
    "email_verified_at": null,
    "created_at": "2025-10-23T10:00:00.000000Z",
    "updated_at": "2025-10-23T10:00:00.000000Z"
  }
  ```