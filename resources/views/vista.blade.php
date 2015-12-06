<style type="text/css">
    .tr1{
        background-color: white;
        color: black;
    }

</style>
                         
<div >    
    <div >
    <h1>Retrasos por dia</h1>
    <table class="table   btn-theme04">
        <thead>
        <tr>
            <th class="numeric">Pos</th>
            <th class="numeric">Nombre</th>

            <th class="numeric">hora de ingreso</th>
            <th class="numeric">horario</th>
            <th class="numeric">Veredicto</th>


        </tr>
        </thead>
        <tbody >
       <?php $pusto=1;?> 
        @foreach($datos as $user)
            @if( $user->h1>5 or$user->h2>0  )
            <tr>
                <td class="tr1"><?php echo $pusto++;?></td>
                <td class="tr1">{{$user->nombre}}</td>
                <td class="tr1">{{$user->h3}}</td>
                <td class="tr1">{{$user->h4}}</td>
                <td class="tr1">Atrasado</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    </div>
    
</div>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script> 


