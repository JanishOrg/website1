namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'amount' => 'required|numeric',
            'phone' => 'required|string',
            'player_id' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $payment = Payment::create([
            'name' => $request->name,
            'email' => $request->email,
            'amount' => $request->amount,
            'phone' => $request->phone,
            'player_id' => $request->player_id,
            'image_path' => $imagePath,
        ]);

        return response()->json($payment, 201);
    }
}
