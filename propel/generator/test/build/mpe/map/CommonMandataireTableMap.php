<?php



/**
 * This class defines the structure of the 'mandataire' table.
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
class CommonMandataireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonMandataireTableMap';

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
        $this->setName('mandataire');
        $this->setPhpName('CommonMandataire');
        $this->setClassname('CommonMandataire');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_groupement', 'IdGroupement', 'INTEGER', 'groupement', 'id', true, null, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', false, null, null);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', false, null, null);
        $this->addColumn('type_mandataire', 'TypeMandataire', 'CHAR', true, null, null);
        $this->getColumn('type_mandataire', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('rc_ville', 'RcVille', 'INTEGER', true, null, null);
        $this->addColumn('rc_numero', 'RcNumero', 'INTEGER', true, null, null);
        $this->addColumn('mail', 'Mail', 'VARCHAR', true, 100, null);
        $this->addColumn('statut_invitation', 'StatutInvitation', 'CHAR', true, null, '0');
        $this->getColumn('statut_invitation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonGroupement', 'CommonGroupement', RelationMap::MANY_TO_ONE, array('id_groupement' => 'id', ), null, null);
    } // buildRelations()

} // CommonMandataireTableMap
