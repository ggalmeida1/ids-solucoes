<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class customerController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customer::orderBy('nome', 'asc')->paginate(10);

        return view('customers.index', [
            'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $validator = $this->validator($data);
        if($validator->fails()){
            return redirect()->route('customers.create')
            ->withErrors($validator)
            ->withInput();
        }

        $customer = new Customer;
        $customer->nome = $data['name'];
        $customer->veiculo = $data['veiculo'];
        $customer->pa = $data['pa'];
        $customer->status = $data['status'];
        $customer->banco = $data['banco'];
        $customer->total_divida = $data['total_divida'];
        $customer->valor_quitado = $data['valor_quitado'];
        $customer->entrada = $data['entrada'];
        $customer->qt_parcelas = $data['qt_parcelas'];
        $customer->valor_parcela = $data['valor_parcela'];
        $customer->notas = $data['notas'];
        $customer->revisao = $data['revisao'];
        $customer->buscas = $data['buscas'];
        $customer->acao_tomada = $data['acao_tomada'];

        $customer->save();

        return redirect()->route('customers.index');
    }

    protected function validator(array $data){
        return Validator::make($data,[
            'name' => ['required','string','max:100'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        if($customer) {
            return view('customers.edit', [
                'customer' => $customer
            ]);
        }

        return redirect()->route('customers.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        if($customer) {
            $data = $request->all();

            //Change the fields
            $customer->nome = $data['name'];
            $customer->veiculo = $data['veiculo'];
            $customer->pa = $data['pa'];
            $customer->status = $data['status'];
            $customer->banco = $data['banco'];
            $customer->total_divida = $data['total_divida'];
            $customer->valor_quitado = $data['valor_quitado'];
            $customer->entrada = $data['entrada'];
            $customer->qt_parcelas = $data['qt_parcelas'];
            $customer->valor_parcela = $data['valor_parcela'];
            $customer->notas = $data['notas'];
            $customer->revisao = $data['revisao'];
            $customer->buscas = $data['buscas'];
            $customer->acao_tomada = $data['acao_tomada'];
            $customer->valor_contrato = $data['valor_contrato'];
            $customer->valor_aberto = $data['valor_aberto'];
            $customer->dt_cobranca = $data['dt_cobranca'];
            $customer->vl_cobranca = $data['vl_cobranca'];


            $customer->save();
        }

        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //implement safe delete method
    {

        if($id) {
            $customer = Customer::find($id);
            $customer->delete();
        }
        return redirect()->route('customers.index');
    }
}
