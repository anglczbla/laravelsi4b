
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['nama', 'singkatan', 'fakultas_id'];
=======
     protected $fillable = ['nama','singkatan','fakultas_id'];
>>>>>>> 9bc1e05f6068226adacc9d041858fc48f1880447

    public function fakultas() {
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
        //return $this->belongsTo(Nama_Model::class, 'foreign_key');
        // 1 prodi 1 fakultas belongsTo()
        // 1 fakultas > 1 prodi hasMany()
    }
}
