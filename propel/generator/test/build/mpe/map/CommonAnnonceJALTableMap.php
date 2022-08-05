<?php



/**
 * This class defines the structure of the 'AnnonceJAL' table.
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
class CommonAnnonceJALTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAnnonceJALTableMap';

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
        $this->setName('AnnonceJAL');
        $this->setPhpName('CommonAnnonceJAL');
        $this->setClassname('CommonAnnonceJAL');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('libelle_type', 'LibelleType', 'VARCHAR', true, 250, '');
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, null);
        $this->addColumn('objet', 'Objet', 'VARCHAR', false, 255, null);
        $this->addColumn('texte', 'Texte', 'LONGVARCHAR', false, null, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        $this->addColumn('option_envoi', 'OptionEnvoi', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAnnonceJALPieceJointe', 'CommonAnnonceJALPieceJointe', RelationMap::ONE_TO_MANY, array('id' => 'id_annonce_jal', ), 'CASCADE', 'CASCADE', 'CommonAnnonceJALPieceJointes');
        $this->addRelation('CommonDestinataireAnnonceJAL', 'CommonDestinataireAnnonceJAL', RelationMap::ONE_TO_MANY, array('id' => 'idAnnonceJAL', ), null, null, 'CommonDestinataireAnnonceJALs');
    } // buildRelations()

} // CommonAnnonceJALTableMap
