@if($action === 'create')
<form action="{{@route('store')}}" method="post">
@CSRF
<div class="mb-3">
    <label for="name" class="form-label">Nom de l'opération *</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Facture d'électricité" required>
</div>
<div class="mb-3">
    <label for="date" class="form-label">Date *</label>
    <input type="date" class="form-control" name="date" id="date" required>
</div>
<div class="mb-3">
    <label for="amount" class="form-label">Montant *</label>
    <div class="input-group">
        <input type="text" class="form-control" name="amount" id="amount" required>
        <span class="input-group-text">€</span>
    </div>
</div>

<div class="mb-3">
    <label for="category" class="form-label">Catégorie</label>
    <select class="form-select" name="category" id="category">
        <option value="" selected>Aucune catégorie</option>
        <option value="1">Nourriture</option>
        <option value="2">Loisir</option>
        <option value="3">Travail</option>
        <option value="4">Voyage</option>
        <option value="5">Sport</option>
        <option value="6">Habitat</option>
        <option value="7">Cadeaux</option>
        <option value="0">Autre</option>
    </select>
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
</div>
</form>
@endif


@if($action === 'update')
<form action="{{@route('update')}}" method="post">
@CSRF
<div class="mb-3">
    <label for="name" class="form-label">Nom de l'opération *</label>
    <input type="text" class="form-control" name="name" id="name" value="{{$transaction->name}}" required>
</div>
<div class="mb-3">
    <label for="date" class="form-label">Date *</label>
    <input type="date" class="form-control" name="date" id="date" value="{{$transaction->date_transaction}}" required>
</div>
<div class="mb-3">
    <label for="amount" class="form-label">Montant *</label>
    <div class="input-group">
        <input type="text" class="form-control" name="amount" id="amount" value="{{$transaction->amount}}" required>
        <span class="input-group-text">€</span>
    </div>
</div>

<div class="mb-3">
    <label for="category" class="form-label">Catégorie</label>
    <select class="form-select" name="category" id="category" value="{{$transaction->category_id}}">
        <option value="" selected>Aucune catégorie</option>
        <option value="1">Nourriture</option>
        <option value="2">Loisir</option>
        <option value="3">Travail</option>
        <option value="4">Voyage</option>
        <option value="5">Sport</option>
        <option value="6">Habitat</option>
        <option value="7">Cadeaux</option>
        <option value="0">Autre</option>
    </select>
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
</div>
</form>
@endif
