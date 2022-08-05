<?php



/**
 * This class defines the structure of the 'Historique_Avis_Pub' table.
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
class CommonHistoriqueAvisPubTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonHistoriqueAvisPubTableMap';

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
        $this->setName('Historique_Avis_Pub');
        $this->setPhpName('CommonHistoriqueAvisPub');
        $this->setClassname('CommonHistoriqueAvisPub');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_avis', 'IdAvis', 'INTEGER', true, null, null);
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', true, 20, null);
        $this->addColumn('detail_statut', 'DetailStatut', 'INTEGER', true, null, null);
        $this->addColumn('motif_rejet', 'MotifRejet', 'VARCHAR', false, 255, null);
        $this->addColumn('prenom_agent', 'PrenomAgent', 'VARCHAR', true, 255, null);
        $this->addColumn('nom_agent', 'NomAgent', 'VARCHAR', true, 255, null);
        $this->addColumn('type_historique', 'TypeHistorique', 'INTEGER', true, 2, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonHistoriqueAvisPubTableMap
