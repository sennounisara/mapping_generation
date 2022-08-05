<?php



/**
 * This class defines the structure of the 'Avis_Membres_CAO' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonAvisMembresCAOTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAvisMembresCAOTableMap';

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
        $this->setName('Avis_Membres_CAO');
        $this->setPhpName('CommonAvisMembresCAO');
        $this->setClassname('CommonAvisMembresCAO');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('id_enveloppe', 'IdEnveloppe', 'INTEGER', true, 22, null);
        $this->addColumn('nom_agent', 'NomAgent', 'VARCHAR', true, 100, null);
        $this->addColumn('prenom_agent', 'PrenomAgent', 'VARCHAR', true, 100, null);
        $this->addColumn('date_action', 'DateAction', 'VARCHAR', true, 20, null);
        $this->addColumn('admissibilite', 'Admissibilite', 'INTEGER', true, 1, 0);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('sous_pli', 'SousPli', 'INTEGER', true, 3, 0);
        $this->addColumn('type_depot_reponse', 'TypeDepotReponse', 'INTEGER', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAvisMembresCAOTableMap
