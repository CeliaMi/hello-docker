from fastapi import FastAPI

app = FastAPI()

events = [
    {"id": 1, "name": "Total Solar Eclipse", "date": "2026-08-12", "visible_in": "Spain, Portugal, Greenland"},
    {"id": 2, "name": "Perseids Meteor Shower", "date": "2025-08-12", "visible_in": "Northern Hemisphere"},
    {"id": 3, "name": "Total Lunar Eclipse", "date": "2025-09-07", "visible_in": "Europe, Africa, Asia"}
]
@app.get("/")
def read_root():
    return {"message": "Welcome to the Astronomical Events API visit /events for more information."}

@app.get("/events")
def get_events():
    return events

@app.get("/events/{id}")
def get_event(id: int):
    for e in events:
        if e["id"] == id:
            return e
    return {"error": "Event not found"}
