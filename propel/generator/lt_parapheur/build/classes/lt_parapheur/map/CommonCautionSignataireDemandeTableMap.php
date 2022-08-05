<?php



/**
 * This class defines the structure of the 'caution_signataire_demande' table.
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
class CommonCautionSignataireDemandeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonCautionSignataireDemandeTableMap';

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
        $this->setName('caution_signataire_demande');
        $this->setPhpName('CommonCautionSignataireDemande');
        $this->setClassname('CommonCautionSignataireDemande');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_demande', 'IdDemande', 'INTEGER', 'caution_demande', 'ID', true, null, null);
        $this->addForeignKey('id_signataire', 'IdSignataire', 'INTEGER', 'agent_banquier', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonCautionDemande', 'CommonCautionDemande', RelationMap::MANY_TO_ONE, array('id_demande' => 'ID', ), null, null);
        $this->addRelation('CommonAgentBanquier', 'CommonAgentBanquier', RelationMap::MANY_TO_ONE, array('id_signataire' => 'id', ), null, null);
    } // buildRelations()

} // CommonCautionSignataireDemandeTableMap
