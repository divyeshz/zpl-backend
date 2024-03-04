<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Create Team.
     */
    public function create(Request $request)
    {
        // Validate incoming data
        $this->validate($request, [
            'team_name'     => 'required|string',
            'total_balance' => 'required|numeric',
            'slogan'        => 'nullable|string',
            'jerseys'       => 'nullable',
        ]);

        Team::create([
            'team_name'     => $request->team_name,
            'total_balance' => $request->total_balance,
            'slogan'        => $request->slogan,
            'jerseys'       => $request->jerseys,
        ]);

        // Return success message
        return ok(__('strings.success', ['name' => 'Team Created']));
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);

        // Return success response after account creation
        return ok(__('strings.success', ['name' => 'Team details']), ['user' => $team]);
    }

    public function update(Request $request)
    {
        // Validate incoming data
        $this->validate($request, [
            'id'            => 'required',
            'team_name'     => 'required|string',
            'total_balance' => 'required|numeric',
            'slogan'        => 'nullable|string',
            'jerseys'       => 'nullable',
        ]);

        $team  = Team::findOrFail($request->id);

        $team->update([
            'team_name'     => $request->team_name,
            'total_balance' => $request->total_balance,
            'slogan'        => $request->slogan,
            'jerseys'       => $request->jerseys,
        ]);

        // Return success response
        return ok(__('strings.success', ['name' => 'Team updated']));
    }

    public function delete($id)
    {
        $team = Team::findOrFail($id);
        dd($team);

        $team->delete();

        // Return success response
        return ok(__('strings.success', ['name' => 'Team delete']));
    }
}
