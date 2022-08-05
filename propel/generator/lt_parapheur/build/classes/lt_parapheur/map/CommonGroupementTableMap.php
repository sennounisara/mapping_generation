<?php



/**
 * This class defines the structure of the 'groupement' table.
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
class CommonGroupementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonGroupementTableMap';

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
        $this->setName('groupement');
        $this->setPhpName('CommonGroupement');
        $this->setClassname('CommonGroupement');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ref_consultation', 'RefConsultation', 'INTEGER', true, null, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', true, null, null);
        $this->addColumn('nom_groupement', 'NomGroupement', 'LONGVARCHAR', true, null, null);
        $this->addColumn('type_groupement', 'TypeGroupement', 'CHAR', false, null, '1');
        $this->getColumn('type_groupement', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('invitation_envoye', 'InvitationEnvoye', 'CHAR', true, null, '0');
        $this->getColumn('invitation_envoye', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonMandataire', 'CommonMandataire', RelationMap::ONE_TO_MANY, array('id' => 'id_groupement', ), null, null, 'CommonMandataires');
    } // buildRelations()

} // CommonGroupementTableMap
