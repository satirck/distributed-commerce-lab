# Engineering Workflow

## Purpose

This project is built to simulate work on a real production system.

The objective is not to finish features as quickly as possible but to make deliberate engineering decisions, discuss trade-offs and continuously improve architectural thinking.

---

# Roles

## Developer

The developer is responsible for:

- researching unfamiliar topics;
- making implementation decisions;
- designing architecture;
- justifying technical choices during review.

## Reviewer

The reviewer is responsible for:

- defining engineering direction;
- preparing problem-oriented tasks;
- reviewing architecture and code;
- challenging design decisions;
- suggesting improvements.

---

# Development Process

Every feature follows the same lifecycle.

Issue

↓

Research

↓

Implementation

↓

Pull Request

↓

Review

↓

Merge

---

# Task Lifecycle

GitHub Projects is the single source of truth.

Available states:

- 📥 Backlog
- 🚧 In Progress
- 🧪 Testing
- 🧊 Blocked
- ✅ Done

---

# Branch Naming

feature/DCL-001-short-description

research/DCL-001-short-description

bugfix/DCL-001-short-description

---

# Pull Requests

Every pull request should:

- reference the related Issue;
- explain architectural decisions;
- describe alternatives that were considered;
- mention known limitations.

---

# Documentation

Engineering documentation lives under `/docs`.

Architecture decisions are documented as ADRs.

Research notes are stored separately from implementation.

---

# Review Philosophy

A review is not intended to find a single correct answer.

Instead, the review focuses on:

- reasoning;
- trade-offs;
- maintainability;
- scalability;
- future evolution.

---

# DDD Principles

The project follows a DDD-oriented approach.

General principles:

- avoid primitive obsession;
- use Value Objects where appropriate;
- avoid leaking persistence concerns into public contracts;
- prefer explicit domain language.

Specific implementation details will be documented through ADRs.

---

# Stable Task Identifiers

Every task receives a permanent identifier.

Examples:

DCL-001
ORD-001
PAY-001

These identifiers remain stable regardless of GitHub Issue numbers.

---

# Engineering Mindset

The goal of the project is not only to build software.

The goal is to become a better software engineer by making and defending engineering decisions.
