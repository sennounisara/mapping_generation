<?php



/**
 * This class defines the structure of the 'exec_prix_avenant' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonExecPrixAvenantTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecPrixAvenantTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('exec_prix_avenant');
        $this->setPhpName('CommonExecPrixAvenant');
        $this->setClassname('CommonExecPrixAvenant');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_avenant', 'IdAvenant', 'INTEGER', 'exec_avenant', 'id', true, null, null);
        $this->addForeignKey('id_prix', 'IdPrix', 'INTEGER', 'exec_prix', 'id', false, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', false, 255, null);
        $this->addColumn('intitule', 'Intitule', 'LONGVARCHAR', false, null, null);
        $this->addColumn('unite', 'Unite', 'VARCHAR', false, 50, null);
        $this->addColumn('ecart_quantite', 'EcartQuantite', 'DOUBLE', false, null, 0);
        $this->addColumn('quantite_av', 'QuantiteAv', 'DOUBLE', false, null, null);
        $this->addColumn('quantite_ap', 'QuantiteAp', 'DOUBLE', false, null, null);
        $this->addColumn('prix_unitaire', 'PrixUnitaire', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ht_av', 'PrixHtAv', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ht_ap', 'PrixHtAp', 'DOUBLE', false, null, null);
        $this->addColumn('taux_tva', 'TauxTva', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ttc_av', 'PrixTtcAv', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ttc_ap', 'PrixTtcAp', 'DOUBLE', false, null, null);
        $this->addColumn('quantite_max', 'QuantiteMax', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ht_min', 'PrixHtMin', 'DOUBLE', true, null, null);
        $this->addColumn('prix_ht_max', 'PrixHtMax', 'DOUBLE', true, null, null);
        $this->addColumn('prix_ttc_min', 'PrixTtcMin', 'DOUBLE', true, null, null);
        $this->addColumn('prix_ttc_max', 'PrixTtcMax', 'DOUBLE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecAvenant', 'CommonExecAvenant', RelationMap::MANY_TO_ONE, array('id_avenant' => 'id', ), null, null);
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonExecPrix', 'CommonExecPrix', RelationMap::MANY_TO_ONE, array('id_prix' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecPrixAvenantTableMap
