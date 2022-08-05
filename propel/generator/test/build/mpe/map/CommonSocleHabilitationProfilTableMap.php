<?php



/**
 * This class defines the structure of the 'Socle_Habilitation_Profil' table.
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
class CommonSocleHabilitationProfilTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonSocleHabilitationProfilTableMap';

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
        $this->setName('Socle_Habilitation_Profil');
        $this->setPhpName('CommonSocleHabilitationProfil');
        $this->setClassname('CommonSocleHabilitationProfil');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_profil', 'IdProfil', 'INTEGER', true, null, null);
        $this->addColumn('gestion_agent_pole_socle', 'GestionAgentPoleSocle', 'CHAR', true, null, '0');
        $this->getColumn('gestion_agent_pole_socle', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_agents_socle', 'GestionAgentsSocle', 'CHAR', true, null, '0');
        $this->getColumn('gestion_agents_socle', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('droit_gestion_services_socle', 'DroitGestionServicesSocle', 'CHAR', true, null, '0');
        $this->getColumn('droit_gestion_services_socle', false)->setValueSet(array (
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
    } // buildRelations()

} // CommonSocleHabilitationProfilTableMap
